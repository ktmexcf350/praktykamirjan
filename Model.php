<?php
abstract class Model
{
    protected static string $tabela; // Database table name  

    public static function find(int $id): ?static
    {
        $dbConnection = new Dbconnection();
        $pdo = $dbConnection->getConnection();
        $stmt = $pdo->prepare("SELECT * FROM " . static::$tabela . " WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        return $data ? static::mapToObject($data) : null;
    }

    public function save(): bool
    {
        $dbConnection = new Dbconnection();
        $pdo = $dbConnection->getConnection();
        $fields = get_object_vars($this);
        $columns = array_keys($fields);

        if (isset($this->id)) {
            // Update record  
            $query = "UPDATE " . static::$tabela . " SET " . implode(", ", array_map(fn($col) => "$col = :$col", $columns)) . " WHERE id = :id";
        } else {
            // Insert new record  
            $query = "INSERT INTO " . static::$tabela . " (" . implode(", ", $columns) . ") VALUES (" . implode(", ", array_map(fn($col) => ":$col", $columns)) . ")";
        }

        $stmt = $pdo->prepare($query);
        foreach ($fields as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        return $stmt->execute();
    }

    private static function mapToObject(array $data): static
    {
        $object = new static();
        foreach ($data as $key => $value) {
            $object->$key = $value;
        }
        return $object;
    }
}
