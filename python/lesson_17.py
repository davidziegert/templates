# pip install cryptography

from cryptography.fernet import Fernet

# we will be encrypting the below string.
clearTXT = "hello geeks"

# generate a key for encryption and decryption
# You can use fernet to generate
# the key or use random key generator
# here I'm using fernet to generate key

key = Fernet.generate_key()

# Instance the Fernet class with the key

fernet = Fernet(key)

# then use the Fernet class instance
# to encrypt the string string must
# be encoded to byte string before encryption

encryptTXT = fernet.encrypt(clearTXT.encode())

print("original string: ", clearTXT)
print("encrypted string: ", encryptTXT)

# decrypt the encrypted string with the
# Fernet instance of the key,
# that was used for encrypting the string
# encoded byte string is returned by decrypt method,
# so decode it to string with decode methods

decryptTXT = fernet.decrypt(encryptTXT).decode()

print("decrypted string: ", decryptTXT)
