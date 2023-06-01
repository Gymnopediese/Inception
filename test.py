from ftplib import FTP

def upload_file(ftp, local_file, remote_file):
    with open(local_file, 'rb') as file:
        ftp.storbinary('STOR ' + remote_file, file)

def download_file(ftp, remote_file, local_file):
    with open(local_file, 'wb') as file:
        ftp.retrbinary('RETR ' + remote_file, file.write)

# Informations du serveur FTP
ftp_server = "localhost"
ftp_port = 21
ftp_username = "albaud"
ftp_password = "FTPPassword"

# Nom du fichier local à téléverser
local_file = "toupload"

# Nom du fichier distant sur le serveur FTP
remote_file = "toupload"

# Se connecter au serveur FTP
ftp = FTP()
ftp.connect(ftp_server, ftp_port)
ftp.login(user=ftp_username, passwd=ftp_password)

# Téléversement du fichier local
upload_file(ftp, local_file, remote_file)

# Téléchargement du fichier distant
download_file(ftp, remote_file, "omg")

# Fermer la connexion FTP
ftp.quit()