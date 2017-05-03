<?php

namespace MovingImage\DataProvider\Wrapper;

use MovingImage\Meta\Interfaces\EmbedCodeInterface;
use MovingImage\Meta\Interfaces\VideoInterface;

/**
 * Class SingleVideo.
 *
 * @author Ruben Knol <ruben.knol@movingimage.com>
 */
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

    /**
     * SingleVideo constructor.
     *
     * @param VideoInterface     $video
     * @param EmbedCodeInterface $embedCode
     */
    public function __construct(VideoInterface $video, EmbedCodeInterface $embedCode)
    {
        $this->video = $video;
        $this->embedCode = $embedCode;
    }

    /**
     * @return VideoInterface
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @return EmbedCodeInterface
     */
    public function getEmbedCode()
    {
        return $this->embedCode;
    }
}