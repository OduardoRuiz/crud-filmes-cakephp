<?php
class Filme extends AppModel {
    public $belongsTo = array(
        'Categoria' => array(
            'className' => 'Categoria',
            'foreignKey' => 'categoria_id'
        )
    );
}
