<?php

namespace DrupalCodeGenerator\Commands\Drupal_8\Yml;

use DrupalCodeGenerator\Commands\BaseGenerator;
use DrupalCodeGenerator\Utils;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Implements d8:yml:routing command.
 */
class Routing extends BaseGenerator {

  protected $name = 'd8:yml:routing';
  protected $description = 'Generates a routing yml file';
  protected $alias = 'routing.yml';

  /**
   * {@inheritdoc}
   */
  protected function interact(InputInterface $input, OutputInterface $output) {
    $vars = $this->collectVars($input, $output, Utils::defaultQuestions());
    $vars['class'] = Utils::human2class($vars['name'] . 'Controller');
    $this->files[$vars['machine_name'] . '.routing.yml'] = $this->render('d8/yml/routing.yml.twig', $vars);
  }

}
