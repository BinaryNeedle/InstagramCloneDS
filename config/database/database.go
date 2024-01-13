package database

import (
	"database/sql"
	"fmt"
	"time"

	_ "github.com/go-sql-driver/mysql"
)

var DB *sql.DB

func init() {
	_, err := ConnDB()
	if err != nil {
		fmt.Println("Failed to connect to the database:", err)
		return
	}
}

func ConnDB() (*sql.DB, error) {
	db, err := sql.Open("mysql", "root:@tcp(localhost:3306)/db_in_here")
	if err != nil {
		fmt.Println(err)
	}
	db.SetMaxIdleConns(10)
	db.SetMaxOpenConns(100)
	db.SetConnMaxIdleTime(5 * time.Minute)
	db.SetConnMaxLifetime(60 * time.Minute)

	DB = db

	return DB, nil
}
