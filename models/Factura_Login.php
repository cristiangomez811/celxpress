<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "factura".
 *
 * @property integer $NO_ORDEN
 * @property integer $CC
 * @property string $NOMBRE
 * @property integer $TELEFONO_UNO
 * @property integer $TELEFONO_DOS
 * @property string $FECHA
 * @property string $ESTADO
 * @property string $PROCESO
 * @property integer $VALOR
 * @property integer $IMEI
 * @property string $MARCA_MODELO
 */
class Factura_Login extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'factura';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CC', 'NOMBRE', 'TELEFONO_UNO', 'FECHA', 'PROCESO', 'VALOR', 'IMEI', 'MARCA_MODELO'], 'required'],
            [['CC', 'TELEFONO_UNO', 'TELEFONO_DOS', 'VALOR', 'IMEI'], 'integer'],
            [['FECHA'], 'safe'],
            [['PROCESO', 'MARCA_MODELO'], 'string'],
            [['NOMBRE'], 'string', 'max' => 50],
            [['ESTADO'], 'string', 'max' => 10],
            [['TELEFONO_UNO','TELEFONO_DOS'], 'string','max' => 10],
        ];  
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NO_ORDEN' => 'Numero de factura',
            'CC' => 'Cedula de Ciudadania',
            'NOMBRE' => 'Nombre completo del usuario',
            'TELEFONO_UNO' => 'Telefono del usuario',
            'TELEFONO_DOS' => 'Telefono opcional del usuario',
            'FECHA' => 'Fecha de la factura',
            'ESTADO' => 'Estado de la orden',
            'PROCESO' => 'Proceso de la orden y motivo de ingreso',
            'VALOR' => 'Precio de la orden',
            'IMEI' => 'IMEI del celular',
            'MARCA_MODELO' => 'Modelo y marca del equipo',
        ];
    }
}
