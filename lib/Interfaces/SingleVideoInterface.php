<?php

namespace MovingImage\DataProvider\Interfaces;

use MovingImage\Meta\Interfaces\EmbedCodeInterface;
use MovingImage\Meta\Interfaces\VideoInterface;

/**
 * Interface SingleVideoInterface
 *
 * @author Ruben Knol <ruben.knol@movingimage.com>
 */
interface SingleVideoInterface
{
    /**
     * @return VideoInterface
     */
    public function getVideo();

    /**
     * @return EmbedCodeInterface
     */
    public function getEmbedCode();
}
