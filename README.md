# Welcome to TeamUp
<p align="center" >
<img style="background-color: #fff; border-radius: 50%;" src="https://github.com/LashenDEV/teamup/blob/main/public/assets/images/logos/teamup%20logo.png" width="30%" height="30%">
</p>


_We are a group of undergraduate students concentrating on forming a community of students that will work as a team to study web development and be interested in digitalization. Through this web application, we hope to bring all the clubs in the University closer to the students through the online methodology_


**Setup TeamUp on your system**

```bash
composer install
```

```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

```bash
create a database as "teamup"
```

```bash
import teamup.sql from the project directory into the teamup database
```

```bash
php artisan migrate --seed
```

```bash
php artisan serve
```

Add required package env keys to enable all the features

Great, everything is set up! 🎉

## Login
**Admin**
```text
email: admin@demo.com 
password: 12345678
```
**President**
```text
email: president@demo.com 
password: 12345678
```
**Member**
```text
email: member@demo.com
password: 12345678
```
