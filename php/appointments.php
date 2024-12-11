
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database Connection
$host = 'localhost';
$dbname = 'lujos';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}

class AppointmentsHandler
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function createAppointment($data)
    {
        $sql = "INSERT INTO citas (nombre, correo, telefono, mecanico, tiempo, observaciones) 
                VALUES (:nombre, :correo, :telefono, :mecanico, :tiempo, :observaciones)";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':nombre' => $data['name'],
                ':correo' => $data['email'],
                ':telefono' => $data['subject'],
                ':mecanico' => $data['mechanic'],
                ':tiempo' => date('Y-m-d H:i:s'),
                ':observaciones' => $data['message']
            ]);
            return true;
        } catch (PDOException $e) {
            error_log("Appointment creation error: " . $e->getMessage());
            return false;
        }
    }
    public function updateAppointment($id, $data)
    {
        $sql = "UPDATE citas 
                SET nombre = :nombre, correo = :correo, telefono = :telefono, 
                    mecanico = :mecanico, observaciones = :observaciones 
                WHERE id = :id";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':nombre' => $data['name'],
                ':correo' => $data['email'],
                ':telefono' => $data['subject'],
                ':mecanico' => $data['mechanic'],
                ':observaciones' => $data['message'],
                ':id' => $id
            ]);
            return true;
        } catch (PDOException $e) {
            error_log("Appointment update error: " . $e->getMessage());
            return false;
        }
    }


    public function getAllAppointments()
    {
        $sql = "SELECT * FROM citas ORDER BY tiempo DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



    public function deleteAppointment($id)
    {
        $sql = "DELETE FROM citas WHERE id = :id";
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':id' => $id]);
            return true;
        } catch (PDOException $e) {
            error_log("Appointment deletion error: " . $e->getMessage());
            return false;
        }
    }
}

// Create the handler with your existing PDO connection
$appointmentsHandler = new AppointmentsHandler($pdo);

