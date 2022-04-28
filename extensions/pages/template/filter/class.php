<?php

class ExtPagesTemplateFilterClass extends ComPagesTemplateFilterAbstract
{
    protected function _initialize(KObjectConfig $config)
    {
        $config->append(array(
            'priority' => self::PRIORITY_LOW,
            'classes'  => array()
        ));

        parent::_initialize($config);
    }

    public function filter(&$text)
    {
        //Find classes between <ktml:classes></ktml:classes>
        if(preg_match_all('#<ktml:classes.*>(.*)<\/ktml:classes>#siU', $text, $matches))
        {
            foreach($matches[1] as $key => $match)
            {
                $classes = $this->getObject('object.config.factory')->fromString('ini', trim($match));
                $this->getConfig()->classes->append($classes);

                $text = str_replace($matches[0][$key], '', $text);
            }
        }

        if($this->isEnabled())
        {
            $matches = array();

            //Find css classes
            if(preg_match_all('#class="(.*)"#siU', $text, $matches))
            {
                $matches = array_combine($matches[0], $matches[1]);

                foreach($matches as $match => $classes)
                {
                    $classes = array_map('trim', explode(' ', $classes));

                    foreach($classes as $key => $class)
                    {
                        if($this->getConfig()->classes->has($class)) {
                            $classes[$key] = $this->getConfig()->classes->get($class);
                        }
                    }

                    $replace = 'class="'.implode(' ', $classes).'"';
                    if($match != $replace) {
                        $text = str_replace($match, $replace, $text);
                    }
                }
            }
        }
    }
}