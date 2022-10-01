//Problem link:https://leetcode.com/problems/pascals-triangle-ii/

#include<bits/stdc++.h>
using namespace std;
    vector<int> getRow(int rowIndex) {
        vector<vector<int>> ans;
        for(int i=0;i<=rowIndex;i++)
        {
            vector<int> temp(i+1);
            temp[0]=1;
            temp[i]=1;
            for(int j=1;j<i;j++)
            {
                temp[j]=ans[i-1][j-1]+ans[i-1][j];
            }
            ans.push_back(temp);
        }
        return ans[rowIndex];
    }

    int main()
    {
        int n;
        cout<<"Enter no. of rows";
        cin>> n;
        vector<int> ans=getRow(n);
    }