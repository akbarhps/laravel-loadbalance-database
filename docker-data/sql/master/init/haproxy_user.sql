CREATE USER 'haproxy_root'@'%' IDENTIFIED BY 'devpass';

GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' IDENTIFIED BY 'devpass';
GRANT ALL PRIVILEGES ON *.* TO 'haproxy_root'@'%' IDENTIFIED BY 'devpass';

CREATE USER 'haproxy_user'@'%';

FLUSH PRIVILEGES;