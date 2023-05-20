import requests
import time

def test(url):
    while True:
        try:
            debut = time.time()
            response = requests.get(url, timeout=5)
            fin = time.time()
            latence = fin - debut
            
            if response.status_code == 200:
                print(f'{siteName} est en ligne avec une latence de {latence} secondes')
            else:
                print(f'{siteName} n\'est pas en ligne. Statut: {response.status_code}')
        except requests.exceptions.RequestException:
            print(f'{siteName} n\'est pas en ligne.')
        
        time.sleep(10)

url = 'https://www.l1-7.ephec-ti.be/'
siteName = 'L1-7.ephec-ti.be'
test(url)





