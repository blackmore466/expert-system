<?php
require_once 'vendor/autoload.php';

use \Jhg\ExpertSystem\Inference\InferenceEngine;
use \Jhg\ExpertSystem\Knowledge\Fact;
use \Jhg\ExpertSystem\Knowledge\KnowledgeBase;
use \Jhg\ExpertSystem\Knowledge\KnowledgeJsonLoader;
use \Jhg\ExpertSystem\Knowledge\Rule;

$knowledgeBase = new KnowledgeBase();
//rules
$knowledgeBase->add(Rule::factory('childcount > 0', '$havechild = "yes";'));
$knowledgeBase->add(Rule::factory('owncar == "yes" && observationinhospital == "yes" && transaltorinhospital == "yes"',
                                  '$optimalprogram = "ProgramB";'));
$knowledgeBase->add(Rule::factory('thirdpartiesvisiting == yes & returnfamilyifcarcrash == yes '.
                                  'needjuridicalhelp == yes', '$optimal-program = "Program C";'));

//facts
$knowledgeBase->add(Fact::factory('owncar', 'yes'));
$knowledgeBase->add(Fact::factory('observationinhospital', 'yes'));
$knowledgeBase->add(Fact::factory('transaltorinhospital', 'yes'));


$engine = new InferenceEngine();
$engine->run($knowledgeBase);
print_r($knowledgeBase->getFacts()['optimalprogram']);