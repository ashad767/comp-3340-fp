<?php

final class blog extends db
{
    public function __construct()
    {
        // PHP does not call the parent constructor automatically...
        parent::__construct();
    }

    public function admin_create_db()
    {
        if (!$this->admin_permit_create_drop())
            throw new Exception('Database CREATEs are prohibited by admin.');

        // An SQL prepared statement is not needed here since everything
        // is from this site and safe...
        $sql = <<<ZZEOF
            CREATE TABLE blogs (
            id INTEGER AUTO_INCREMENT PRIMARY KEY,
            user VARCHAR(80) NOT NULL,
            title VARCHAR(255) NOT NULL,
            content LONGTEXT NOT NULL,
            created DATE NOT NULL,
            FOREIGN KEY (user) REFERENCES users(user)
            )
        ZZEOF;

        return $this->db_handle()->exec($sql);
    }

    public function admin_destroy_db()
    {
        if (!$this->admin_permit_create_drop())
            throw new Exception('Database DROPs are prohibited by admin.');

        $sql = "DROP TABLE IF EXISTS blogs";
        return $this->db_handle()->exec($sql);
    }


    public function insert($title, $content){
        $sql = 'SELECT max(id) FROM blogs';
        $stmt = $this->db_handle()->prepare($sql);
        $stmt->execute();
        $newID = $stmt->fetch();

        // Create the entry to add...
        $entry = array(
        ':id' => $newID[0] + 1,
        ':user' => $_COOKIE["user"],
        ':title' => $title,
        ':content' => $content,
        ':created' => date("Y-m-d", time()),
        );

        // Create the SQL prepared statement and insert the entry...
        $sql = 'INSERT INTO blogs VALUES (:id, :user, :title, :content, :created)';
        $stmt = $this->db_handle()->prepare($sql);
        return $stmt->execute($entry);
    }

    public function remove($id)
    {
        $entry = array( ':id' => $id );

        // Create the SQL prepared statement and delete the entry...
        $sql = 'DELETE FROM blogs WHERE id = :id';
        $stmt = $this->db_handle()->prepare($sql);
        $stmt->execute($entry);
    }

    public function all_blogs()
    {
        // Create the SQL prepared statement and insert the entry...
        $sql = 'SELECT * FROM blogs';
        $stmt = $this->db_handle()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>
