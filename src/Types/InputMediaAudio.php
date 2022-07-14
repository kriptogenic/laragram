<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* InputMediaAudio
 *
 *Represents an audio file to be treated as music to be sent.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputmediaaudio
 */
class InputMediaAudio extends Laragram
{
    /**
    * Type of the result, must be *audio*
    * @var string
    */
    public string $type;

    /**
    * File to send. Pass a file\_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file\_attach\_name>” to upload a new one using multipart/form-data under <file\_attach\_name> name. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
    * @var string
    */
    public string $media;

    /**
    * *Optional*. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file\_attach\_name>” if the thumbnail was uploaded using multipart/form-data under <file\_attach\_name>. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
    * @var any_of|null
    */
    public ?any_of $thumb = null;

    /**
    * *Optional*. Caption of the audio to be sent, 0-1024 characters after entities parsing
    * @var string|null
    */
    public ?string $caption = null;

    /**
    * *Optional*. Mode for parsing entities in the audio caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
    * @var string|null
    */
    public ?string $parse_mode = null;

    /**
    * *Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*
    * @var array|null
    */
    public ?array $caption_entities = null;

    /**
    * *Optional*. Duration of the audio in seconds
    * @var int|null
    */
    public ?int $duration = null;

    /**
    * *Optional*. Performer of the audio
    * @var string|null
    */
    public ?string $performer = null;

    /**
    * *Optional*. Title of the audio
    * @var string|null
    */
    public ?string $title = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->media = $data['media'];
        if (isset($data['thumb'])){
            $this->thumb = $data['thumb'];
        }

        if (isset($data['caption'])){
            $this->caption = $data['caption'];
        }

        if (isset($data['parse_mode'])){
            $this->parse_mode = $data['parse_mode'];
        }

        if (isset($data['caption_entities'])){
            $this->caption_entities = $data['caption_entities'];
        }

        if (isset($data['duration'])){
            $this->duration = $data['duration'];
        }

        if (isset($data['performer'])){
            $this->performer = $data['performer'];
        }

        if (isset($data['title'])){
            $this->title = $data['title'];
        }

    }
}