<?php
/**
 * Widget Configuration
 *
 * $config['widget']['id']  => [ $options ]  (array)(Required) An array containining the widget options. $options explain below.
 * 		Id must be unique within your namespace.
 *		Ex: $config['widget']['wdg1'] => [$wdg1_options];
 *			$config['widget']['wdg2'] => [$wdg2_options];
 *
 *  ---------------------------
 *	Array $options :
 *  'uses'            => (string)(Required) The widget class to use. The class must extends atkWp\WidgetComponent
 *						Ex: 'uses' =>  __NAMESPACE__ . '\widgets\Event'
 *
 *  'title'           => (string)(Required) A string that hold the title of the widget as it appear in the admin area.
 *  'widget_ops'      => (array)(Optional)  An array that hold widget option as defined in Wordpress widget options.
 */