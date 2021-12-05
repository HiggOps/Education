#include <iostream>
#include <string>
using namespace std;

int linearSearch (int A[], int x, int n) {
    int i=0;
    while (1) {
        if (i<n) {
            if (A[i] == x) {
                cout << "Element " << x << " znajduje się pod indeksem " << i << endl;
                return 1;
            } else {
                i=i+1;
            }
        } else {
            cout << "Szukanego elementu nie ma w tablicy" << endl;
            return -1;
        }
    }
}

int main() {
    int sortedArray[]={1,1,3,3,6,7,8,9,12,15};
    int sizeofSortedArray=sizeof(sortedArray)/sizeof(sortedArray[0]);
    
    
    //linearSearch(which Array, what is being searched, size of Array);
    linearSearch(sortedArray,7, sizeofSortedArray);
    
}