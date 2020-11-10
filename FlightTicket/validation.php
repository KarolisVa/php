<?php

class Validate
{
  private $errors = [];
  private $data;
  private $fields = ['skrydziai', 'Asmens_Kodas', 'Vardas', 'Is_Kur_skrenda', 'I_kur_skrenda', 'Bagazas', 'Kaina', 'Pastabos'];

  public function __construct($_POST_DATA)
  {
    $this->data = $_POST_DATA;
  }

  public function ValidateFields()
  {
    foreach($this->fields as $field)
    {
      if($field == 'Pastabos')
      {
        continue;
      }
      if(empty($this->data[$field]))
      {
        //echo $field;
        $this->addError($field, 'Negali buti tuscias');
      }

      if(preg_match("/[<,>]/", $this->data[$field]))
      {
        $this->addError($field, 'Netinkamas Formatas');
      }
    }

    $this->ValidateKodas();
    $this->ValidateVardas();
    $this->ValidatePastabos();
    $this->ValidateKaina();
    $this->ValidateBagazas();
    return $this->errors;
  }

  private function ValidateKodas()
  {
    $val = $this->data['Asmens_Kodas']; //12345678912
    if (!is_numeric($val))
    {
      $this->addError('Asmens Kodas', 'Asmens kodas gali buti tiktai skaicai');
    }
    if(strlen($val) > 11 and $val !=0)
    {
      $this->addError('Asmens Kodas', 'Asmens Kodas negali buti ilgesnis negu 11');
    }
    else if(strlen($val) < 11 and $val !=0)
    {
      $this->addError('Asmens Kodas', 'asmens kodas negali buti trumpesnis negu 11');
    }
  }

  private function ValidateVardas()
  {
    $val = $this->data['Vardas'];
    $this->checkIfNumber($val, 'Vardas');
    if(strlen($val)>100)
    {
      $this->addError('Vardas', 'Vardas negali buti daugiau negu 101');
    }
  }

  private function ValidatePastabos()
  {
    $val = $this->data['Pastabos'];

    if(preg_match("/[<,>]/", $val))
    {
      $this->addError('Pastabos', 'Netinkamas Formatas');
    }
    
    if(strlen($val) == 0)
    {
    }
    else if(strlen($val)>1000)
    {
      $this->addError('Pastabos', 'Pastaba negali buti ilgesne negu 1000 raidziu');
    }
    else if(strlen($val)<50)
    {
      $this->addError('Pastabos', 'Minimalus komentaro raidziu skaicius yra 50');
    }
  }

  private function ValidateBagazas()
  {
    $val = $this->data['Bagazas'];
    if (!is_numeric($val))
    {
      $this->addError('Bagazas', 'Bagazas gali buti tiktai skaiciai');
    }
  }
  private function ValidateKaina()
  {
    $val = $this->data['Kaina'];
    if (!is_numeric($val))
    {
      $this->addError('Kaina', 'Kaina gali buti tiktai skaicai');
    }
    else if($_POST['Bagazas'] > 20)
    {
        $_POST['Kaina'] = $_POST['Kaina'] + 30;
    }
  }

  private function checkIfNumber($val, $smt)
  {
      if(is_numeric($val))
      {
        echo "<br>";
        echo $val . " yra numerinis";
        $this->addError($smt, 'gali tureti tik raides');
      }
  }

  private function addError($key, $val)
  {
    $this->errors[$key]=$val;
  }
}

function getValue($inputValue)
{
    $array = [
        "skrydzio numeris"=>[
            0 => " ",
            1 => "A6",
            2 => "A8",
            3 => "B4"
        ],

        "is kur skrenda"=>[
            0 => " ",
            1=> "Vilnius",
            2 => "Kaunas",
            3 => "Šiauliai"
        ],
        
        "i kur skrenda"=>[
            0 => "",
            1=> "Lisabona",
            2 => "Stanbulas",
            3 => "Pekinas"
        ]

        ];

    foreach($array[$inputValue] as $value)
    {
        echo '<option value ='.$value.'>'.$value.'</option>';
    }

};
