# PHP Public API

This is a simple PHP-based public API that returns the following information in JSON format:

1. Email address
2. Current datetime in ISO 8601 format (UTC)
3. GitHub URL of the project's codebase

## API Endpoint

**GET** `https://yourdomain.com/api.php`

## Response Format

```json
{
  "email": "your-email@example.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "https://github.com/yourusername/your-repo"
}
