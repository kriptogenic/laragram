<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* answerPreCheckoutQuery
 *
 *Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form of an [Update](https://core.telegram.org/bots/api/#update) with the field *pre\_checkout\_query*. Use this method to respond to such pre-checkout queries. On success, *True* is returned. **Note:** The Bot API must receive an answer within 10 seconds after the pre-checkout query was sent.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#answerprecheckoutquery
 * @abstract
 */
abstract class answerPreCheckoutQuery extends Laragram
{
    /**
     * @var string pre_checkout_query_id *(required: true)* Unique identifier for the query to be answered
     * @var bool ok *(required: true)* Specify *True* if everything is alright (goods are available, etc.) and the bot is ready to proceed with the order. Use *False* if there are any problems.
     * @var string error_message  Required if *ok* is *False*. Error message in human readable form that explains the reason for failure to proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to the user.
     * 
     * @access answerPreCheckoutQuery
     */
     public static function answerPreCheckoutQuery () {
        return true;
     }
}