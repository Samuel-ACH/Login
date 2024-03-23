<?php 
class Parametro {
    public static function dataServerEmail()
    {
        include('../Conexion_be.php');
       // $conn = $conexion;
        try {
            $parametrosEmail = array();
            $query = "SELECT Parametro, Valor FROM tbl_ms_parametros WHERE Parametro 
            IN('Servidor_SMTP','Correo_SMTP','Clave_SMTP','Cifrado_SMTP','Puerto_SMTP', 'Nombre_Sistema');";
            $resultado = mysqli_query($conexion, $query);
            //Fetch assoc: solo toma una linea donde convierte un array para recibir un resultado
            while ($fila = mysqli_fetch_assoc($resultado)){
                switch ($fila['parametro']) {
                    case 'Servidor_SMTP':
                        $parametrosEmail += [
                            'Servidor_SMTP' => $fila['valor']
                        ];
                        break;
                    case 'Correo_SMTP':
                        $parametrosEmail += [
                            'Correo_SMTP' => $fila['valor']
                        ];
                        break;
                    case 'Clave_SMTP':
                        $parametrosEmail += [
                            'Clave_SMTP' => $fila['valor']
                        ];
                        break;
                        case 'Cifrado_SMTP':
                            $parametrosEmail += [
                                'Cifrado_SMTP' => $fila['valor']
                            ];
                            break;
                            case 'Nombre_Sistema':
                                $parametrosEmail += [
                                    'Nombre_Sistema' => $fila['valor']
                                ];
                                break;
                    default:
                        $parametrosEmail += [
                            'Puerto_SMTP' => $fila['valor']
                        ];
                        break;
                }
            }
        } catch (Exception $e) {
            echo '
            <script> Error SQL: </script>
            ' . $e;
        }
        mysqli_close($conexion); //Cerrar conexion
        return $parametrosEmail;
    }

}
