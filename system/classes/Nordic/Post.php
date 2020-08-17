<?

namespace Nordic;

class Post extends \Nordic\Unit {

    protected $table;

    public function getTable($table) {

        $this->table = $table;

    }

    public function setTable() {
        return $this->table;
    }

    public function __get($name) {
        echo "Иди домой".$name;
    }

    public function __set($name, $value) {
            echo "лопрордлорлдр  $name 'попр' $value";
    }

}