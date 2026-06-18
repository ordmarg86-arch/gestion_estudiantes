<?php
/**
 * Actividad Formativa 2: Desarrollo de una Aplicación Simple en Línea
 * Tema: Sistema de Gestión de Estudiantes
 * Conceptos applied: Clases, Atributos, Constructor, Métodos e Instanciación.
 */

// 1. DEFINICIÓN DE LA CLASE
class Estudiante {
    
    // Atributos (Propiedades de la clase)
    // Usamos 'private' para proteger los datos (Encapsulamiento)
    private $matricula;
    private $nombre;
    private $carrera;
    private $promedio;

    // 2. CONSTRUCTOR
    // Se ejecuta automáticamente al crear un nuevo objeto e inicializa los atributos
    public function __construct($matricula, $nombre, $carrera, $promedio) {
        $this->matricula = $matricula;
        $this->nombre = $nombre;
        $this->carrera = $carrera;
        $this->promedio = $promedio;
    }

    // 3. MÉTODOS (Comportamientos de la clase)

    // Método para obtener una cadena con los datos del estudiante
    public function obtenerDetalles() {
        return "<strong>Matrícula:</strong> {$this->matricula} | " .
               "<strong>Nombre:</strong> {$this->nombre} | " .
               "<strong>Carrera:</strong> {$this->carrera} | " .
               "<strong>Promedio:</strong> {$this->promedio}";
    }

    // Método con lógica para evaluar la situación académica del estudiante
    public function evaluarEstado() {
        if ($this->promedio >= 9.0) {
            return "<span style='color: green;'>Excelente (Aprobado con honores)</span>";
        } elseif ($this->promedio >= 7.0) {
            return "<span style='color: blue;'>Regular (Aprobado)</span>";
        } else {
            return "<span style='color: red;'>Condicional (En riesgo académico)</span>";
        }
    }
}

// ====================================================================
// 4. PROGRAMA PRINCIPAL (Instanciación de objetos y pruebas)
// ====================================================================

echo "<h2>Sistema de Control Escolar - Vista de Pruebas</h2>";
echo "<hr>";

// Instanciación del Objeto 1
$estudiante1 = new Estudiante("2026001", "Ana Lucía Martínez", "Ingeniería en Software", 9.5);

// Instanciación del Objeto 2
$estudiante2 = new Estudiante("2026002", "Carlos Eduardo Gómez", "Diseño Digital", 6.8);

// --- Mostrar Resultados del Estudiante 1 ---
echo "<h3>Información del Estudiante 1:</h3>";
echo $estudiante1->obtenerDetalles() . "<br>";
echo "<strong>Estado Académico:</strong> " . $estudiante1->evaluarEstado() . "<br>";

echo "<br><hr><br>";

// --- Mostrar Resultados del Estudiante 2 ---
echo "<h3>Información del Estudiante 2:</h3>";
echo $estudiante2->obtenerDetalles() . "<br>";
echo "<strong>Estado Académico:</strong> " . $estudiante2->evaluarEstado() . "<br>";
?>