<?php

/*
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * @{class:DivinerAtom} representing an article (supplementary high-level
 * documentation not tied to source code).
 */
class DivinerArticleAtom extends DivinerAtom {

  public function getIsTopLevelAtom() {
    return true;
  }

  public function getType() {
    return self::TYPE_ARTICLE;
  }

  public function getChildren() {
    return array();
  }

}
