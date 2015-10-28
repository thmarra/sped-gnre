<?php

namespace Sped\Gnre\Webservice\Test;

use Sped\Gnre\Webservice\ConnectionFactory;

/**
 * @covers \Sped\Gnre\Webservice\ConnectionFactory
 */
class ConnectionFactoryTest extends \PHPUnit_Framework_TestCase {

    public function testDeveRetornarUmaNovaInstanciaDeConnection() {
        $setup = $this->getMockForAbstractClass('\Sped\Gnre\Configuration\Setup');

        $factory = new ConnectionFactory();
        $connection = $factory->createConnection($setup, array(), '<env:soap>my data</env:soap>');

        $this->assertInstanceOf('\Sped\Gnre\Webservice\Connection', $connection);
    }

}
