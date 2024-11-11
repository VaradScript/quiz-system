# MyQuiz - PHP/MySQL Quiz Application

A dynamic quiz application built with PHP and MySQL that allows users to take quizzes, track scores, and manage quiz content.

## Features

- User authentication and registration
- Multiple choice questions
- Real-time score tracking
- Admin panel for quiz management
- Responsive design
- Score history and statistics
- Timer for each quiz
- Leaderboard system

## Requirements

- PHP 7.4+
- MySQL 5.7+
- Apache/Nginx web server
- Composer for dependency management

## Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/myquiz.git
```

2. Import the database schema:
```bash
mysql -u username -p database_name < database/quiz.sql
```

3. Configure database connection:
```bash
cp config/config.example.php config/config.php
# Edit config.php with your database credentials
```

4. Install dependencies:
```bash
composer install
```

5. Set proper permissions:
```bash
chmod 755 -R storage/
chmod 644 config/config.php
```

## Database Structure

```sql
-- Main tables
quiz_users
quiz_questions
quiz_answers
quiz_results
quiz_categories
```

## Usage

1. Access the application through your web browser
2. Register a new account or login
3. Select a quiz category
4. Start answering questions
5. View your results and compare with others

## Admin Panel

Access `/admin` with admin credentials to:
- Add/Edit questions
- Manage users
- View statistics
- Create new quizzes

## Security

- SQL injection prevention
- XSS protection
- CSRF tokens
- Password hashing
- Input validation

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit changes (`git commit -m 'Add amazing feature'`)
4. Push to branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

Your Name - [@yourusername](https://twitter.com/yourusername)
Project Link: [https://github.com/yourusername/myquiz](https://github.com/yourusername/myquiz)

## Acknowledgments

- PHP Documentation
- MySQL Documentation
- Bootstrap for UI components
- Contributors and testers
