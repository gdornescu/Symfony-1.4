--TEST--
PEAR_ErrorStack::staticPush() context callback set in singleton
--SKIPIF--
<?php
if (!getenv('PHP_PEAR_RUNTESTS')) {
    echo 'skip';
}
?>
--FILE--
<?php
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'setup.php.inc';
function contextcallback($code, $params, $trace)
{
    global $wasCalled, $phpunit;
    $phpunit->assertEquals(4, $code, 'wrong context code');
    $phpunit->assertEquals(array('hello' => 6), $params, 'wrong context params');
    $wasCalled = true;
    return array('hi' => 'there', 'you' => 'fool');
}
    
$stack = &PEAR_ErrorStack::singleton('test2', false, 'contextcallback');
$wasCalled = false;
PEAR_ErrorStack::staticPush('test2', 4, 'error', array('hello' => 6));
$phpunit->assertTrue($wasCalled, 'context callback was not called!');
$err = $stack->pop();
unset($err['time']);
$phpunit->assertEquals(
    array(
        'code' => 4,
        'params' => array('hello' => 6),
        'package' => 'test2',
        'level' => 'error',
        'context' => array('hi' => 'there', 'you' => 'fool'),
        'message' => '',
    ),
    $err, 'popped something else'
);
$err = PEAR_ErrorStack::staticPop('test2');
$phpunit->assertNull($err, 'stack not empty!');
echo 'tests done';
?>
--EXPECT--
tests done
