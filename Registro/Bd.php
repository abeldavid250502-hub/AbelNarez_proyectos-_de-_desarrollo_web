<?php
class Bd {

    private static ?PDO $pdo = null;

    static function pdo(): PDO {

        if (self::$pdo === null) {

            // Ruta al archivo SQLite: /bd/databases/usuarios.db
            $dbPath = __DIR__ . "/databases/usuarios.db";

            self::$pdo = new PDO(
                "sqlite:" . $dbPath,
                null,
                null,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_PERSISTENT => false,
                ]
            );

            // Tabla de usuarios (login)
            self::$pdo->exec("
                CREATE TABLE IF NOT EXISTS usuarios (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    usuario TEXT UNIQUE NOT NULL,
                    password TEXT NOT NULL
                );
            ");

            // Tabla de personas (CRUD dentro del perfil)
            self::$pdo->exec("
                CREATE TABLE IF NOT EXISTS personas (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    usuario_id INTEGER NOT NULL,
                    nombre TEXT NOT NULL,
                    telefono TEXT,
                    comentario TEXT,
                    CONSTRAINT fk_personas_usuarios
                        FOREIGN KEY (usuario_id)
                        REFERENCES usuarios(id)
                        ON DELETE CASCADE
                );
            ");
        }

        return self::$pdo;
    }
}
