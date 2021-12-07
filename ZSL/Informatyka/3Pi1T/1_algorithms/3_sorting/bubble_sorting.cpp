#include <iostream>
#include <string>
using namespace std;

void bubbleSort (int A[], int n) {
    int j = n - 1; int i; int pom;
    int movingloop = 1; int repeatingloop = 1;
    while (repeatingloop == 1) {
        if (j > 0) {
            int i = 0;
            while(movingloop == 1) {
                if (j > i) {
                    if (A[i]>A[i+1]) {
                        pom=A[i];
                        A[i]=A[i+1];
                        A[i+1]=pom;
                    }
                    i=i+1;
                    continue;
                } else {
                    j=j-1;
                    break;
                }
            }
            continue;
        } else {
            for (int i = 0; i < n; i++) {
                cout << A[i] << endl;
            }
            break;
        }
    }
}

int main() {
    int i;
    int Array[]={8,5,54,78,34,3,5,67,7};
    int sizeofArray=sizeof(Array)/sizeof(Array[0]);

    //bubbleSort(which Array, size of Array);
    bubbleSort(Array, sizeofArray);

}
