<?php
 return [  'package' => 'Packer',  'destination' => './libs/packer/out/packer/',  'directories' => [   './libs/packer/class'  ],  'files' => [   './libs/packer/config.sample.php',   './libs/packer/run.php',  ],  'registry' => [   'blogs20' => [    'path' => 'modules/blogs20',    'recursive' => true   ]  ],  'types' => [   8  ],  'fieldTypes' => [   20  ],  'objects' => [   4  ],  'branchesStructure' => [   3  ],  'langs' => [   1  ],  'templates' => [   1  ],  'savedRelations' => [   'fields_relations',   'files',   'hierarchy',   'permissions',   'guides'  ] ];