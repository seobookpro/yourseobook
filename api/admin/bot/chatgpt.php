<?php

function chatGPT_request() {
    $api_key = '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';
    $model = 'text-davinci-003';
    $stop = "\n";
    $prompt = "I am a highly intelligent question answering bot. If you ask me a question that is rooted in truth, I will give you the answer. If you ask me a question that is nonsense, trickery, or has no clear answer, I will respond with \"Unknown\".\n\nQ: What is human life expectancy in the United States?\nA: Human life expectancy in the United States is 78 years.\n\nQ: Who was president of the United States in 1955?\nA: Dwight D. Eisenhower was president of the United States in 1955.\n\nQ: Which party did he belong to?\nA: He belonged to the Republican Party.\n\nQ: What is the square root of banana?\nA: Unknown\n\nQ: How does a telescope work?\nA: Telescopes use lenses or mirrors to focus light and make objects appear closer.\n\nQ: Where were the 1992 Olympics held?\nA: The 1992 Olympics were held in Barcelona, Spain.\n\nQ: How many squigs are in a bonk?\nA: Unknown\n\nQ: Where is the Valley of Kings?\nA:";

    $url = 'https://api.openai.com/v1/engines/' . $model . '/completions';

    $headers = array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key,
    );

    $data = array(
        'prompt' => $prompt,
        'temperature' => 0,
        'max_tokens' => 100,
        'top_p' => 1,
        'frequency_penalty' => 0.0,
        'presence_penalty' => 0.0,
        'stop' => array($stop),
    );

    $args = array(
        'body' => json_encode($data),
        'headers' => $headers,
    );

    $response = wp_remote_post($url, $args);

    if (!is_wp_error($response) && $response['response']['code'] === 200) {
        $body = json_decode($response['body'], true);
        $choices = $body['choices'];
        $chat = '';
        foreach ($choices as $choice) {
            $text = $choice['text'];
            $chat .= $text;
        }
        echo '<div class="chat-gpt-response">' . $chat . '</div>';
    } else {
        echo '<p>Error: Unable to retrieve ChatGPT response.</p>';
    }

    wp_die();
}
add_action('wp_ajax_chatGPT_request', 'chatGPT_request');
add_action('wp_ajax_nopriv_chatGPT_request', 'chatGPT_request');



add_action('admin_footer', 'chatGPT_modal');

function chatGPT_modal() {
    ?>
    <div id="chatGPTModal" style="display: none;">
        <div id="chatGPTContent"></div>
    </div>
    <?php
}

add_action('admin_enqueue_scripts', 'chatGPT_enqueue_scripts');

function chatGPT_enqueue_scripts($hook) {
    if ($hook === 'post-new.php' || $hook === 'post.php') {
        wp_enqueue_script('chat-gpt-js', get_template_directory_uri() . '/api/assets/js/chat-gpt.js', array('jquery'), '1.0', true);
        wp_localize_script('chatGPTScript', 'chatGPTData', array(
            'apiKey' => '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',
            'model' => 'text-davinci-003',
            'stop' => "\n",
            'prompt' => "I am a highly intelligent question answering bot. If you ask me a question that is rooted in truth, I will give you the answer. If you ask me a question that is nonsense, trickery, or has no clear answer, I will respond with \"Unknown\".\n\nQ: What is human life expectancy in the United States?\nA: Human life expectancy in the United States is 78 years.\n\nQ: Who was president of the United States in 1955?\nA: Dwight D. Eisenhower was president of the United States in 1955.\n\nQ: Which party did he belong to?\nA: He belonged to the Republican Party.\n\nQ: What is the square root of banana?\nA: Unknown\n\nQ: How does a telescope work?\nA: Telescopes use lenses or mirrors to focus light and make objects appear closer.\n\nQ: Where were the 1992 Olympics held?\nA: The 1992 Olympics were held in Barcelona, Spain.\n\nQ: How many squigs are in a bonk?\nA: Unknown\n\nQ: Where is the Valley of Kings?\nA:"
        ));
    }
}


add_action('wp_enqueue_scripts', 'enqueue_chatgpt_scripts');

function enqueue_chatgpt_scripts() {
  wp_enqueue_script('chatgpt-script', get_stylesheet_directory_uri() . '/api/assets/js/chatgpt.js', array('jquery'), '1.0', true);
    wp_localize_script('chatgpt-script', 'chatgptSettings', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
 'security' => wp_create_nonce('chatgpt-security-nonce'),
        'apiKey' => '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'
    ));
}

add_action('wp_ajax_chatgpt_request', 'handle_chatgpt_request');
add_action('wp_ajax_nopriv_chatgpt_request', 'handle_chatgpt_request');

function handle_chatgpt_request() {
    // Ensure the request is valid and secure
    check_ajax_referer('chatgpt-security-nonce', 'security');

    // Retrieve the necessary data from the request
    // You can access the data sent via POST using $_POST['key']

    // Process the data and generate a response using ChatGPT
    $response = '';

    // Perform your ChatGPT logic here
    // Use the retrieved data to generate the response

    // Send the response back using wp_send_json()
    wp_send_json(array('response' => $response));
}

add_shortcode('chatgpt_button', 'chatgpt_button_shortcode');

function chatgpt_button_shortcode($atts) {
    ob_start();
    ?>
    <button id="chatgpt-button">Open ChatGPT</button>
    <?php
    return ob_get_clean();
}
