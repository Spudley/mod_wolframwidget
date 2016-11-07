<?php
/**
 * @package  mod_wolframwidget
 *
 * @copyright   Copyright (C) 2016 Simon Champion.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$widget = new wolframWidgetProcessor($params);

require JModuleHelper::getLayoutPath('mod_wolframwidget', 'default');

class wolframWidgetProcessor
{
    private $params;

    public function __construct($params)
    {
        $this->params = $params;
        $this->params['widgetID'] = $this->params['widgetPreset'] ?: $this->params['widgetID'];
    }

    public function getWidgetID()
    {
        return $this->params['widgetID'];
    }

    public function getQueryString()
    {
        $mapper = [
            'id'    => 'widgetID',
            'theme' => 'theme',
            'output'=> 'outputType',
            'width' => 'outputWidth',
            'height'=> 'outputHeight',
        ];
        $args = [];
        foreach($mapper as $name => $field) {
            if(!empty($this->params[$field])) {
                $args[$name] = $this->params[$field];
            };
        }
        return http_build_query($args);
   }
}