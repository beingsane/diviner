<?php

/*
 * Copyright 2012 Facebook, Inc.
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
 * Generate @{class:DivinerAtom}s from source code.
 */
abstract class DivinerEngine {

  private $configuration;
  private $engineConfig;

  final public function __construct(
    DivinerProjectConfiguration $config,
    array $engine_config) {
    $this->configuration = $config;
    $this->engineConfig = $engine_config;
  }

  abstract public function buildFileContentHashes();
  abstract public function willParseFiles(array $file_map);
  abstract public function parseFile($file, $data);

  final public function getConfiguration() {
    return $this->configuration;
  }

  final public function getEngineConfiguration($key, $default = null) {
    return idx($this->engineConfig, $key, $default);
  }

  protected function parseParamDoc($doc) {
    $dict = array();
    $split = preg_split('/\s+/', trim($doc), $limit = 2);
    if (!empty($split[0])) {
      $dict['doctype'] = $split[0];
    }
    if (!empty($split[1])) {
      $dict['docs'] = $split[1];
    }
    return $dict;
  }

}
