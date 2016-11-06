<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Personal;

/**
 * PersonalSearch represents the model behind the search form about `app\models\Personal`.
 */
class PersonalSearch extends Personal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idRegistro', 'Pasaporte_idPasaporte'], 'integer'],
            [['nombre', 'edad', 'direccion', 'telefono', 'celular', 'RFC', 'CURP', 'fechaNacimiento', 'nSeguro', 'tipoSangr', 'alergias', 'enferCroni', 'tutorResp', 'correo', 'nacionalidad', 'lugarNacimiento', 'estadoCivil', 'extranjero'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Personal::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idRegistro' => $this->idRegistro,
            'fechaNacimiento' => $this->fechaNacimiento,
            'Pasaporte_idPasaporte' => $this->Pasaporte_idPasaporte,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'edad', $this->edad])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'celular', $this->celular])
            ->andFilterWhere(['like', 'RFC', $this->RFC])
            ->andFilterWhere(['like', 'CURP', $this->CURP])
            ->andFilterWhere(['like', 'nSeguro', $this->nSeguro])
            ->andFilterWhere(['like', 'tipoSangr', $this->tipoSangr])
            ->andFilterWhere(['like', 'alergias', $this->alergias])
            ->andFilterWhere(['like', 'enferCroni', $this->enferCroni])
            ->andFilterWhere(['like', 'tutorResp', $this->tutorResp])
            ->andFilterWhere(['like', 'correo', $this->correo])
            ->andFilterWhere(['like', 'nacionalidad', $this->nacionalidad])
            ->andFilterWhere(['like', 'lugarNacimiento', $this->lugarNacimiento])
            ->andFilterWhere(['like', 'estadoCivil', $this->estadoCivil])
            ->andFilterWhere(['like', 'extranjero', $this->extranjero]);

        return $dataProvider;
    }
}
