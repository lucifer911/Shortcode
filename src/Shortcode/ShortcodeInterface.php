<?php
namespace Thunder\Shortcode\Shortcode;

/**
 * @author Tomasz Kowalczyk <tomasz@kowalczyk.cc>
 */
interface ShortcodeInterface
{
    /**
     * Returns new instance of given shortcode with changed content
     *
     * @param string $content
     *
     * @return self
     */
    public function withContent($content);

    /**
     * Returns shortcode name
     *
     * @return string
     */
    public function getName();

    /**
     * Returns associative array(name => value) of shortcode parameters
     *
     * @return array
     */
    public function getParameters();

    /**
     * Returns parameter value using its name, will return null for parameter
     * without value
     *
     * @param string $name
     * @param null $default
     *
     * @return mixed
     */
    public function getParameter($name, $default = null);

    /**
     * Returns shortcode content (data between opening and closing tag). Null
     * means that shortcode had no content (was self closing), do not confuse
     * that with empty string (hint: use strict comparison operator ===).
     *
     * @return string|null
     */
    public function getContent();
}
