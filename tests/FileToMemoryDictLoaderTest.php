<?php

/*
 * This file is part of the overtrue/pinyin.
 *
 * @author Garveen <acabin@live.com>
 */

namespace Jun\Pinyin\Test;

use Jun\Pinyin\Pinyin;

class FileToMemoryDictLoaderTest extends AbstractDictLoaderTestCase
{
    protected function setUp()
    {
        $this->pinyin = new Pinyin('Jun\Pinyin\MemoryFileDictLoader');
    }
}
