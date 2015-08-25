<?php
namespace Thunder\Shortcode\Serializer;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

/**
 * @author Tomasz Kowalczyk <tomasz@kowalczyk.cc>
 */
interface SerializerInterface
{
    /**
     * Serializes Shortcode class instance into given format
     *
     * @param ShortcodeInterface $s Instance to serialize
     *
     * @return string
     */
    public function serialize(ShortcodeInterface $s);

    /**
     * Loads back Shortcode instance from serialized format
     *
     * @param $text
     *
     * @return ShortcodeInterface
     */
    public function unserialize($text);
}
