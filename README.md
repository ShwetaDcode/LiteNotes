# LiteNotes

A modern, lightweight note-taking web application built with **Laravel 9**, **Docker**, and **TablePlus** for developers and productivity enthusiasts.

---

## 📂 Features

- Create, edit, and organize notes effortlessly
- User authentication (sign-up, login, logout)
- Secure account management (change username, email, reset password)
- Timestamps for note creation and updates
- Simple and responsive UI

---

## 📁 Tech Stack

- **Framework**: Laravel 9
- **Backend**: PHP (Laravel Blade engine)
- **Database**: MySQL (TablePlus for management)
- **Environment**: Docker (multi-container setup)
- **OS**: Linux-based development

---

## ⚙️ Installation

### 1. Clone the repository
```bash
git clone https://github.com/ShwetaDcode/Litelette.git
cd Litelette
```

### 2. Configure environment variables
```bash
cp .env.example .env
```
Edit `.env` and configure your database, app URL, mail, etc.

### 3. Start Docker containers
```bash
docker-compose up -d
```

### 4. Install dependencies
```bash
docker exec -it app composer install
```

### 5. Generate application key
```bash
docker exec -it app php artisan key:generate
```

### 6. Run migrations
```bash
docker exec -it app php artisan migrate
```

---

## 💼 Usage

- Visit the app in your browser (e.g., `http://localhost:8000`)
- Register a new account
- Start creating and managing notes!

---

## 🌐 Environment Access

- **App**: `http://localhost:8000`
- **Database (TablePlus)**:
  - Host: `127.0.0.1`
  - Port: `3306`
  - Username: `root`
  - Password: (from `.env`)

---

## ✨ Contribution

Feel free to fork the repo, submit issues or pull requests!

---

## 🌟 Author

Made with ❤️ by [Shweta D](https://github.com/ShwetaDcode)

---

## 🔗 License

This project is licensed under the MIT License.
