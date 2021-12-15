#include <iostream>
#include <string>
using namespace std;

int binarySearch(int A[], int x,int n) {
        int p=0; int k=n-1;
        int s;
        while (1) {
        if (p>=k) {cout << "Szukanego elementu nie ma w tablicy" << endl;
        return -1;}
        else {
            s=(p+k)/2;
            if (A[s]==x) {cout << "Element " << x << " znajduje się pod indeksem " << s << endl;
            return 1;}
            else {
                if (A[s]<x) p=s+1;
                else k=s-1;
            }
        }
    }   
    
}

int main() {
    int sortedArray[]={1,1,3,3,6,7,8,9,12,15};
    int sizeofSortedArray=sizeof(sortedArray)/sizeof(sortedArray[0]);

    for(i = 0; i < 430; i++) Z[i] = i;
    int sizeofZ = sizeof(Z)/sizeof(Z[0]);


    //binarySearch(which Array, what is being searched, size of Array);
    binarySearch(Z,7, sizeofZ);
}