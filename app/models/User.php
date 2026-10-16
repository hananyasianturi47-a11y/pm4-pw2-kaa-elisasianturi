<?php
class user_error
{
    private PDO $db;
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function findByUsername($Username)
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM users WHERE username = ?"
        );
        stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}