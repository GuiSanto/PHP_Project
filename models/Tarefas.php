<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tarefas".
 *
 * @property int $id
 * @property string $titulo
 * @property string|null $descricao
 * @property string $data_criacao
 * @property string|null $data_conclusao
 * @property string $estado
 */
class Tarefas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tarefas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'data_criacao', 'estado'], 'required'],
            [['descricao'], 'string'],
            [['data_criacao', 'data_conclusao'], 'safe'],
            [['titulo'], 'string', 'max' => 40],
            [['estado'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'descricao' => 'Descricao',
            'data_criacao' => 'Data Criacao',
            'data_conclusao' => 'Data Conclusao',
            'estado' => 'Estado',
        ];
    }
}
