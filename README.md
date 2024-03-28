# Description

This is a template to install wordpress locally. Update .gitignore when clone from this template.

# Project Setup

Copy .htaccess from .htaccess.example.

To start wordpress
```shell
docker compose up -d
```

To mysql docker if need
```shell
docker compose -f mysql.yml up -d
```

To terminate
```shell
docker compose down
```

Enter database information after start (http://localhost)

---

# Dependencies

This template was built by [Docker](https://www.docker.com/).
