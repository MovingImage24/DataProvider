<?php

declare(strict_types=1);

namespace MovingImage\DataProvider\Wrapper;

use MovingImage\Meta\Interfaces\EmbedCodeInterface;
use MovingImage\Meta\Interfaces\VideoInterface;

class Video
{
    /**
     * @var VideoInterface
     */
    private $video;

    /**
     * @var EmbedCodeInterface
     */
    private $embedCode;

    public function __construct(VideoInterface $video, EmbedCodeInterface $embedCode)
    {
        $this->video = $video;
        $this->embedCode = $embedCode;
    }

    public function getVideo(): VideoInterface
    {
        return $this->video;
    }

    public function getEmbedCode(): EmbedCodeInterface
    {
        return $this->embedCode;
    }
}