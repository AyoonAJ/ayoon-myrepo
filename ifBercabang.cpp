#include <iostream>
using namespace std;

int main() {
    int angka;

    cout << "Masukkan angka: "; cin >> angka;
    cout << "==================="<< endl;

    if(angka > 0) {
        cout << "Angka yang dimasukkan adalah positif." << endl;

        if(angka % 2 == 0) {
            cout << "Angka tersebut juga merupakan bilangan genap." << endl;
        } else {
            cout << "Angka tersebut juga merupakan bilangan ganjil." << endl;
        }
    } else {
        cout << "Angka yang dimasukkan bukan angka positif." << endl;
    }

    return 0;
}