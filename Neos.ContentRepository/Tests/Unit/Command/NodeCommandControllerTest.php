<?php
namespace Neos\ContentRepository\Tests\Unit;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */
use Neos\ContentRepository\Command\NodeCommandController;
use Neos\ContentRepository\Domain\Repository\WorkspaceRepository;
use Neos\Flow\ObjectManagement\ObjectManager;
use Neos\Flow\Core\ApplicationContext;
use Neos\Flow\Reflection\ReflectionService;

class MockProxy
{

    private static $mock;

    public static function setStaticExpectations($mock)
    {
        self::$mock = $mock;
    }

    // Any static calls we get are passed along to self::$mock. public static
    public static function __callStatic($name, $args)
    {
        return call_user_func_array(array(self::$mock, $name),$args);    
    }
}

class RegistrationService extends MockProxy
{

}

/**
 * Tests for NodeCommandController
 */
class NodeCommandControllerTest extends \Neos\Flow\Tests\UnitTestCase
{
    /**
     * @test
     */
    public function repairCommandExitsOnWrongWorkspace()
    {
        $wsName = 'not_live_maybe_dead';
        $expected = 1;
        $repairCtrl = new NodeCommandController();
      
        
/*        
        $workspaceRepositoryMock = $this->getMockBuilder(\Neos\ContentRepository\Domain\Repository\WorkspaceRepository::class)
                                        ->setMethods(['countByName'])
                                        ->getMock();
        $workspaceRepositoryMock->expects($this->atLeastOnce())->method('countByName')->willReturn($cntWs);

        $this->inject($repairCtrl, 'workspaceRepository', $workspaceRepositoryMock);  

        //$repairCtrlMock = new MockProxy();
        $pluginConfigurationsMock = $this->createMock(\Neos\ContentRepository\Domain\Repository\WorkspaceRepository::class);
        $this->assertEquals(null, RegistrationService::setStaticExpectations($objectManager,$pluginConfigurationsMock),'detectPlugins');      
*/
        $context = new ApplicationContext('Development');
        $objectManager = new ObjectManager($context);
        $objectManagerMock = $this->createMock(\Neos\Flow\ObjectManagement\ObjectManager::class);
        //$this->assertEquals($objectManagerMock,$objectManager);

        $mockReflectionService = $this->createMock(ReflectionService::class);
        $mockReflectionService->expects($this->at(0))->method('getAllImplementationClassNamesForInterface')->with(NodeCommandControllerPluginInterface::class)->will($this->returnValue([]));

        $objectManagerMock->get($mockReflectionService);

        $repairCtrl->injectObjectManager($objectManagerMock);
        $result = $repairCtrl->repairCommand(null, $wsName, true, false, null, null);
        $this->assertSame($expected, $result); 
    }
}