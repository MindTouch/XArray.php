<?php declare(strict_types=1);
/**
 * MindTouch XArray
 *
 * Copyright (C) 2006-2016 MindTouch, Inc.
 * www.mindtouch.com  oss@mindtouch.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace MindTouch\XArray\tests\MutableXArray;

use MindTouch\XArray\MutableXArray;
use PHPUnit\Framework\TestCase;

class __ctor_Test extends TestCase {

    /**
     * @test
     */
    public function Constructor_holds_reference_to_source_array() {
        
        // arrange
        $source = ['foo' => 'bar'];
        
        // act
        $x = new MutableXArray($source);
        $x->setVal('foo', 'baz');
        
        // assert
        $this->assertSame($source, $x->toArray());
    }
}