#include <iostream>
#include <string>
using namespace std;

int biggestLowestSearch(int A[], int n) {
    int i = 0; int b = A[0]; int l = A[0];
    while(1) {
        if (i<n) {
                if (b < A[i]) {
                    b = A[i];
                }
                if (l > A[i]) {
                    l = A[i];
                }
                i=i+1;
        } else {
            cout << "Największy element: " << b << endl;
            cout << "Najmniejszy element: " << l << endl;
            return -1;
        }
    }
}
int main() {
    int unsortedArray[]={5,54,8,26,48,4,3,45,12,84};
    int sizeofUnsortedArray=sizeof(unsortedArray)/sizeof(unsortedArray[0]);

    //biggestLowestSearch(which Array, size of Array);
    biggestLowestSearch(unsortedArray, sizeofUnsortedArray); // 3 i 84
    
}