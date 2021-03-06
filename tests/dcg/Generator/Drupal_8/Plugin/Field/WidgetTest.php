<?php

namespace DrupalCodeGenerator\Tests\Generator\Drupal_8\Plugin\Field;

use DrupalCodeGenerator\Tests\Generator\GeneratorBaseTest;

/**
 * Test for d8:plugin:field:widget command.
 */
class WidgetTest extends GeneratorBaseTest {

  protected $class = 'Drupal_8\Plugin\Field\Widget';

  protected $interaction = [
    'Module name [%default_name%]:' => 'Foo',
    'Module machine name [foo]:' => 'foo',
    'Plugin label [Example]:' => 'Example',
    'Plugin ID [foo_example]:' => 'foo_example',
    'Make the widget configurable? [No]:' => 'Yes',
  ];

  protected $fixtures = [
    'config/schema/foo.schema.yml' => __DIR__ . '/_widget_schema.yml',
    'src/Plugin/Field/FieldWidget/ExampleWidget.php' => __DIR__ . '/_widget.php',
  ];

}
