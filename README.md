How to run:

1. Rename the file .env.example to .env

2. Modify the .env file based on your settings


3. On your host machine, go to the project folder and run:
   
```
sudo chown -R 1000:1000
chmod -R 775 src
```


4. Run the container

```
    docker-compose up -d

```

5. Write your php code inside code folder

