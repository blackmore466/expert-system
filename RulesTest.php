<?php

require_once 'models/Rules.php';

class RulesTest extends \PHPUnit_Framework_TestCase
{
    public function testSearchOptimalProgrammNegative() {
        $r = new app\models\Rules();
        $_facts = ['area' => '40-60'];
        $_rules = [];
        $expectedResult = 'Программа не найдена';

        $actualResult = $r->getInfEngResult($_facts, $_rules);

        $this->assertEquals($expectedResult, $actualResult);

    }

    public function testSearchOptimalProgramm() {
        $r = new app\models\Rules();
        $_facts = [ 'tripcount' => '',
                    'havechildintrip' => '',
                    'owncar' => 'yes',
                    'observationinhospital' => 'yes',
                    'translatorinhospital' => 'yes',
                    'thirdpartiesvisiting' => 'no',
                    'returnfamilyifcarcrash' => 'no',
                    'needjuridicalhelp' => 'no'
        ];
        $_rules = [0 => [
            'Condition' => 'owncar == "yes" && observationinhospital == "yes" && translatorinhospital == "yes"',
            'Requirement' => '$optimalprogram = "ProgramB";'
            ],
            1 => [
                'Condition' => 'thirdpartiesvisiting == "yes" && returnfamilyifcarcrash == "yes" && needjuridicalhelp == "yes"',
                'Requirement' => '$optimalprogram = "ProgramC";',
            ]
        ];

        $expectedResult = 'ProgramB';

        $actualResult = $r->getInfEngResult($_facts, $_rules);

        $this->assertEquals($expectedResult, $actualResult);

    }

}