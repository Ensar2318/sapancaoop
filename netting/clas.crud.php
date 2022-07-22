<?php
session_start();
ob_start();
require_once 'dbconfig.php';

//# key_insert = submit butonu name adı.
//# key_column = Where koşununu saglandıgı bilgi.

class crud
{
    private $db;
    private $dbhost = DBHOST;
    private $dbuser = DBUSER;
    private $dbpass = DBPWD;
    private $dbname = DBNAME;

    function __construct()
    {
        try {

            $this->db = new PDO('mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname . ';charset=utf8', $this->dbuser, $this->dbpass);

            // echo "Bağlantı Başarılı";
        } catch (Exception $e) {

            die("Bağlantı Başarısız:" . $e->getMessage());
        }
    }

    function isLogin($user, $pass)
    {
        $stmt = $this->db->prepare("SELECT * FROM admins WHERE admins_username=? AND admins_pass=? ");
        $stmt->execute([$user, $pass]);
        return $stmt->rowCount();
    }

    function adminsLogin($user, $pass, $remember = null)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM admins WHERE admins_username=? AND admins_pass=? ");
            $stmt->execute([$user, $pass]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$stmt->rowCount()) {
                throw new Exception("Böyle bir hesap yok!");
            }

            if ($row['admins_status'] == 0) {
                throw new Exception("Hesaba Girişin Engellendi!");
            }

            $_SESSION['admins'] = [
                'admins_id' => $row['admins_id'],
                'admins_username' => $row['admins_username'],
                'admins_pass' => $row['admins_pass']
            ];

            // if ($remember != null and empty($_COOKIE['admins'])) {
            //     $data = [
            //         "admins_username" => $row['admins_username'],
            //         "admins_pass" => $row['admins_pass']
            //     ];
            //     setcookie("admins", json_encode($data), strtotime("+30 day", "/"));
            // }else{
            //     setcookie("admins", "", strtotime("-30 day", "/"));
            // }

            return ['status' => TRUE];
        } catch (\Throwable $th) {
            return ['status' => FALSE, 'err' => $th->getMessage()];
        }
    }

    function addValue($value)
    {
        return implode(",", array_map(function ($val) {
            return $val . "=?";
        }, array_keys($value)));
    }

    public function imageUpload($name, $size, $tmp_name, $dir, $file_delete = null)
    {

        try {

            $izinli_uzantilar = [
                'jpg',
                'jpge',
                'png',
                'ico'
            ];

            $ext = strtolower(substr($name, strpos($name, '.') + 1));

            if (in_array($ext, $izinli_uzantilar) === false) {
                throw new Exception('Bu dosya türü kabul edilmemektedir...');
            }

            if ($size > 1048576) {
                throw new Exception('Dosya boyutu çok büyük...');
            }

            $name_y = uniqid() . "." . $ext;

            if (!@move_uploaded_file($tmp_name, "dimg/$dir/$name_y")) {
                throw new Exception('Dosya yükleme hatası...');
            }

            if (!empty($file_delete)) {
                unlink("dimg/$dir/$file_delete");
            }

            return $name_y;
        } catch (Exception $e) {

            return ['status' => FALSE, 'error' => $e->getMessage()];
        }
    }

    function insert($table, $values, $options)
    {

        try {

            if (!empty($_FILES[$options['key_filename']]['name'])) {

                $name_y = $this->imageUpload(
                    $_FILES[$options['key_filename']]['name'],
                    $_FILES[$options['key_filename']]['size'],
                    $_FILES[$options['key_filename']]['tmp_name'],
                    $options['key_dir']
                );

                // print_r($name_y);
                // exit;
                if ($name_y['status'] == FALSE) {
                    throw new Exception($name_y['error'], 1);
                }
                $values += [$options['key_filename'] => $name_y];
            }

            unset($values[$options['key_insert']]);

            $stmt = $this->db->prepare("INSERT INTO $table SET {$this->addValue($values)} ");
            $status = $stmt->execute(array_values($values));

            if ($status) {
                return ['status' => TRUE, 'err' => "Ekleme İşlemi Başarılı"];
            } else {
                throw new Exception("Bir Sorun Oluştu", 1);
            }
        } catch (\Throwable $th) {
            return ['status' => FALSE, 'err' => $th->getMessage()];
        }
    }

    function update($table, $values, $options)
    {
        try {

            $column = [$options['key_column'] => $values[$options['key_column']]];
            unset($values[$options['key_insert']]);
            unset($values[$options['key_column']]);
            $valuesExecute = $values;
            $valuesExecute += $column;

            // echo "Valuesexecute:".print_r($valuesExecute);
            // echo "<br>";
            // echo "values".print_r($values);
            // exit;

            $stmt = $this->db->prepare("UPDATE $table SET {$this->addValue($values)} WHERE {$options['key_column']}=?");

            $status = $stmt->execute(array_values($valuesExecute));

            if ($status) {
                return ['status' => TRUE, 'err' => "Güncelleme İşlemi Başarılı"];
            } else {
                throw new Exception("Bir Sorun Oluştu", 1);
            }
        } catch (\Throwable $th) {
            return ['status' => FALSE, 'err' => $th->getMessage()];
        }
    }

    function delete($table, $column, $value, $filename = null)
    {
        try {
            $stmt = $this->db->prepare("DELETE FROM $table WHERE $column=?");
            $status = $stmt->execute([$value]);
            if ($status) {
                if ($filename != null) {
                    unlink("dimg/".$table."/".$filename);
                }
                return ['status' => TRUE, 'err' => "Silme İşlemi Başarılı"];
            } else {
                throw new Exception("Bir Sorun Oluştu", 1);
            }
        } catch (\Throwable $th) {
            return ['status' => FALSE, 'err' => $th->getMessage()];
        }
    }

    function wRead($table, $column, $val, $options = [])
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM $table WHERE $column=?");
            $stmt->execute([$val]);
            return $stmt;
        } catch (\Throwable $th) {
            return ['status' => FALSE, 'err' => $th->getMessage()];
        }
    }

    function read($table, $options = [])
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM $table");
            $stmt->execute();
            return $stmt;
        } catch (\Throwable $th) {
            return ['status' => FALSE, 'err' => $th->getMessage()];
        }
    }
}
